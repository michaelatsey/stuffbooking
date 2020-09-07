<template>
    <v-app id="app">
        <component :is="layout">
            <transition name="fade" mode="out-in">
            <router-view :layout.sync="layout"/>
            </transition>
        </component>
    </v-app>
</template>

<script>
export default {
  name: "app",
  data() {
    return {
      layout: 'div',
    };
  },
};
</script>
