<template>
  <div class="mcontainer">
    <div>Body</div>
    <RightBody />
    <LeftBody />
  </div>
</template>

<script>
import RightBody from "./RightBody.vue";
import LeftBody from "./LeftBody.vue";
export default {
  components: {
    RightBody,
    LeftBody,
  },
};
</script>

<style>
</style>