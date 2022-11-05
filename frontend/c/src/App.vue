<template>
  <div id="app">
    <div class="main">
      <leftContentComponent/>
      <rightContentComponent/>
    </div>
  </div>
</template>

<script>
import leftContentComponent from './components/LeftContentComponent'
import rightContentComponent from './components/RightContentComponent'
export default {
  name: 'App',
  components: {
    leftContentComponent,
    rightContentComponent
  }
}
</script>

<style>
#app {
  width: 700px;
  height: auto;
  margin: auto;
  font-size: 16px;
}

.frame {
  width: 300px;
  height: 600px;
  border: 1px solid navy;
}

button {
  display: block;
  position: relative;
  width: 150px;
  height: 40px;
  background: navy;
  margin: 0 auto;
  margin-top: 30px;
  text-align: center;
  color: white;
}

.btnText {
  color: white;
  display: inline-block;
  padding:10px 0;
}

.listContent {
  display: block;
  height: 50px;
  width: 80%;
  box-sizing: border-box;
  border-bottom: solid 1px navy;
  text-align: center;
  margin: 0 auto;
}

.listContentText {
  display: inline-block;
  padding: 15px 0;
}

ul {
  margin: 0;
  list-style: none;
  margin-left: 0;
  padding-left: 0;
}

li {
  margin-bottom: 5px;
}
</style>
