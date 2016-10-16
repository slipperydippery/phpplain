Vue.component('alert', {
	template: '#alert-template',
	props: ['type'],
	data() {
		return {
			count: 4
		};
	},
	computed: {
		alertClasses: function () {
			var type = this.type;

			return {
				'alert__error' : type ==  'error',
				'alert__succes' : type == 'succes'
			}
		}
	}
});

Vue.component('warning', {
	template: '#warning-template',
	props: ['count']
})

new Vue({
	el: '#app',

});