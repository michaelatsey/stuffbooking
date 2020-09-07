<template>
  <v-card flat>
    <v-toolbar
      color="deep-purple darken-1"
      dark
      extended
      flat
    >
      <v-app-bar-nav-icon></v-app-bar-nav-icon>
    </v-toolbar>

    <v-card
      class="mx-auto"
      max-width="75%"
      style="margin-top: -64px;"
    >
      <v-toolbar flat>
        <v-toolbar-title class="grey--text">MyBooking</v-toolbar-title>

        <v-spacer></v-spacer>

        <v-btn icon>
          <v-icon>mdi-magnify</v-icon>
        </v-btn>

        <v-btn icon>
          <v-icon>mdi-apps</v-icon>
        </v-btn>

        <v-btn icon>
          <v-icon>mdi-dots-vertical</v-icon>
        </v-btn>
      </v-toolbar>

      <v-divider></v-divider>
      <v-card-text style="height: 200px;">

        <router-view></router-view>
      </v-card-text>
    </v-card>
  </v-card>
</template>
