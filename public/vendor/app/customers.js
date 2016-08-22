
    var E_SERVER_ERROR = 'Error communicating with the server'

    // fields definition
    var tableColumns = [
        {
            name: 'id',
            title: 'الرقم',
            sortField: 'id',
        },
        {
            name: 'firstname',
            title: 'الاسم',
            sortField: 'firstname',
        },
        {
            name: 'address',
            title: 'العنوان',
            sortField: 'address',
        },
        {
            name: 'phone',
            title: 'رقم الجوال',
            sortField: 'phone',
        },
        {   title: 'خيارات',
            name: '__actions',
            dataClass: 'text-center',
        }
    ]

    Vue.config.debug = true

    new Vue({
        el: '#app',
        data: {
            searchFor: '',
            fields: tableColumns,
            sortOrder: {
                field: 'firstname',
                direction: 'asc'
            },
            perPage: 10,
            paginationComponent: 'vuetable-pagination',
            itemActions: [
                { name: 'view-item', label: '', icon: 'glyphicon glyphicon-zoom-in', class: 'btn btn-info', extra: {'title': 'View', 'data-toggle':"tooltip", 'data-placement': "left"} },
                { name: 'edit-item', label: '', icon: 'glyphicon glyphicon-pencil', class: 'btn btn-warning', extra: {title: 'Edit', 'data-toggle':"tooltip", 'data-placement': "top"} },
                { name: 'delete-item', label: '', icon: 'glyphicon glyphicon-remove', class: 'btn btn-danger', extra: {title: 'Delete', 'data-toggle':"tooltip", 'data-placement': "right" } }
            ],
            moreParams: [],
            newCustomer:{
                firstname: '',
                lastname: '',
                phone: '',
                address: '',
            },
        },
        watch: {
            'perPage': function(val, oldVal) {
                this.$broadcast('vuetable:refresh')
            },
            'paginationComponent': function(val, oldVal) {
                this.$broadcast('vuetable:load-success', this.$refs.vuetable.tablePagination)
            }
        },
        methods: {
            addCustomer: function(){

            },
            /**
             * Callback functions
             */
            formatDate: function(value, fmt) {
                if (value == null) return ''
                fmt = (typeof fmt == 'undefined') ? 'D MMM YYYY' : fmt
                return moment(value, 'YYYY-MM-DD').format(fmt)
            },
            /**
             * Other functions
             */
            setFilter: function() {

                this.moreParams = [
                    'filter=' + this.searchFor
                ]
                this.$nextTick(function() {
                    this.$broadcast('vuetable:refresh')
                })
            },
            resetFilter: function() {
                this.searchFor = ''
                this.setFilter()
            },
            preg_quote: function( str ) {
                // http://kevin.vanzonneveld.net
                // +   original by: booeyOH
                // +   improved by: Ates Goral (http://magnetiq.com)
                // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
                // +   bugfixed by: Onno Marsman
                // *     example 1: preg_quote("$40");
                // *     returns 1: '\$40'
                // *     example 2: preg_quote("*RRRING* Hello?");
                // *     returns 2: '\*RRRING\* Hello\?'
                // *     example 3: preg_quote("\\.+*?[^]$(){}=!<>|:");
                // *     returns 3: '\\\.\+\*\?\[\^\]\$\(\)\{\}\=\!\<\>\|\:'

                return (str+'').replace(/([\\\.\+\*\?\[\^\]\$\(\)\{\}\=\!\<\>\|\:])/g, "\\$1");
            },
            highlight: function(needle, haystack) {
                return haystack.replace(
                    new RegExp('(' + this.preg_quote(needle) + ')', 'ig'),
                    '<span class="highlight">$1</span>'
                )
            },
            paginationConfig: function(componentName) {
                // console.log('paginationConfig: ', componentName)
                if (componentName == 'vuetable-pagination') {
                    this.$broadcast('vuetable-pagination:set-options', {
                        wrapperClass: 'pagination',
                        icons: { first: '', prev: '', next: '', last: ''},
                        activeClass: 'active',
                        linkClass: 'btn btn-default',
                        pageClass: 'btn btn-default'
                    })
                }
                if (componentName == 'vuetable-pagination-dropdown') {
                    this.$broadcast('vuetable-pagination:set-options', {
                        wrapperClass: 'form-inline',
                        icons: { prev: 'glyphicon glyphicon-chevron-left', next: 'glyphicon glyphicon-chevron-right' },
                        dropdownClass: 'form-control'
                    })
                }
            }
        },
        events: {
            'vuetable:row-changed': function(data) {
                // console.log('row-changed:', data.firstname)
            },
            'vuetable:row-clicked': function(data, event) {
                console.log('clicked:', data.firstname)
                // data.firstname = '! '+data.firstname
                // data.address = '<i>'+data.address+'</i>'
            },
            'vuetable:action': function(action, data) {
                // console.log('vuetable:action', action, data)
                if (action == 'view-item') {
                    alert(action, data.firstname)
                } else if (action == 'edit-item') {
                    alert(action, data.firstname)
                } else if (action == 'delete-item') {
                    alert(action, data.firstname)
                }
            },
            'vuetable:load-success': function(response) {
                var data = response.data.data;
                console.log(data)
                if (this.searchFor !== '') {
                    for (n in data) {
                        data[n].firstname = this.highlight(this.searchFor, data[n].firstname)
                        data[n].phone = this.highlight(this.searchFor, data[n].phone)
                        data[n].address = this.highlight(this.searchFor, data[n].address)
                    }
                }
                
            },
            'vuetable:load-error': function(response) {
                if (response.status == 400) {
                    alert('Something\'s Wrong!', response.data.message, 'error')
                } else {
                    alert('Oops', E_SERVER_ERROR, 'error')
                }
            }
        }
    })
    