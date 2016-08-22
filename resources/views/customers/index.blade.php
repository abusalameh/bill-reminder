@extends('layouts.app')
@section('title')
{{ trans('layout.menu.customers')}}
@stop
@section('styles')
<style>
.vuetable th.sortable:hover {
color: #2185d0;
cursor: pointer;
}
.vuetable-actions {
width: 11%;
padding: 12px 0px;
text-align: center;
}
.vuetable-actions > button {
padding: 3px 6px;
margin-right: 4px;
}
.vuetable-pagination {
margin: 0;
}
.vuetable-pagination .btn {
margin: 2px;
}
.vuetable-pagination-info {
float: left;
margin-top: auto;
margin-bottom: auto;
}
ul.pagination {
margin: 0px;
}
.vuetable-pagination-component {
float: right;
}
.vuetable-pagination-component li a {
cursor: pointer;
}
[v-cloak] {
display: none;
}
.highlight {
background-color: yellow;
}
/* Loading Animation: */
.vuetable-wrapper {
opacity: 1;
position: relative;
filter: alpha(opacity=100); /* IE8 and earlier */
}
.vuetable-wrapper.loading {
opacity:0.4;
transition: opacity .3s ease-in-out;
-moz-transition: opacity .3s ease-in-out;
-webkit-transition: opacity .3s ease-in-out;
}
.vuetable-wrapper.loading:after {
position: absolute;
content: '';
top: 40%;
left: 50%;
margin: -30px 0 0 -30px;
border-radius: 100%;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
border: 4px solid #000;
height: 60px;
width: 60px;
background: transparent !important;
display: inline-block;
-webkit-animation: pulse 1s 0s ease-in-out infinite;
animation: pulse 1s 0s ease-in-out infinite;
}
@keyframes pulse {
0% {
-webkit-transform: scale(0.6);
transform: scale(0.6); }
50% {
-webkit-transform: scale(1);
transform: scale(1);
border-width: 12px; }
100% {
-webkit-transform: scale(0.6);
transform: scale(0.6); }
}
</style>
@stop
@section('section-title')
<h1 class="text-primary"> {{ trans('layout.section.customers.title')}} <span style="font-size:14px;" class="text-info"> {{ trans('layout.section.customers.description')}}</span></h1>

@stop
@section('content')
<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-md-5">
            <div class="form-inline form-group">
                <input v-model="searchFor" class="form-control" @keyup.enter="setFilter">
                <button class="btn btn-primary" @click="setFilter">إبحث</button>
                <button class="btn btn-default" @click="resetFilter">مسح</button>
            </div>
        </div>
        <div class="col-md-7">
            <div class="dropdown form-inline" style="float:left">
                <label>عرض:</label>
                <select class="form-control" v-model="perPage">
                    <option value=10>10</option>
                    <option value=15>15</option>
                    <option value=20>20</option>
                    <option value=25>25</option>
                </select>
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-cog"></i>
                </button>
                <ul class="dropdown-menu">
                    <li v-for="field in fields">
                        <span class="checkbox">
                            <label>
                                <input type="checkbox" v-model="field.visible">
                                @{{ field.title == '' ? field.name.replace('__', '') : field.title | capitalize }}
                            </label>
                        </span>
                    </li>
                </ul>
                <a href="/customer/create" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-right">
                <i class="ti-plus"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <vuetable v-ref:vuetable
        api-url="/api/customers"
        pagination-path=""
        :fields="fields"
        :sort-order="sortOrder"
        table-class="table table-bordered table-striped table-hover"
        ascending-icon="glyphicon glyphicon-chevron-up"
        descending-icon="glyphicon glyphicon-chevron-down"
        pagination-class=""
        pagination-info-class=""
        pagination-component-class=""
        :pagination-component="paginationComponent"
        :item-actions="itemActions"
        :append-params="moreParams"
        :per-page="perPage"
        wrapper-class="vuetable-wrapper"
        table-wrapper=".vuetable-wrapper"
        loading-class="loading"
        ></vuetable>
    </div>
</div>
@stop
@section('scripts')
<script src="{{ asset('vendor/app/customers.js')}}"></script>
@stop