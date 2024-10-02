const { createApp } = Vue;

createApp({
  data() {
    return {
      disks: []
    }
  },
  methods: {
    getDisks() {
      axios
      .get('http://localhost/php-dischi-json/api.php')
      .then(res => {
          this.disks = res.data;
      })
    }
  }, 
  created() {
    this.getDisks()
  }
}).mount('#app')