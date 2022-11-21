<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <p>Number Typed:+ {{ message }}</p>
	                <input type="number" v-model="message" placeholder="Type de number" />
                </div>
                <button v-on:click="calculate( message )">Submit</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      message: '',
      counter: 0,
      json: {},
    }
  },
  methods: {
    calculate: function (mensaje) {
      const  companya =["123","23","3"];
      for ( var i = 0; i < companya.length; i++) {
        alert(companya[i]);
      } 
      this.message = mensaje+"q123prueba";
      //alert(tamano);
    }
  }
}

</script>
