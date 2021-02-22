<template>
  <nav>
    <v-toolbar app flat class="grey lighten-4">
      <v-toolbar-side-icon
        class="grey--text"
        @click="drawer = !drawer"
      ></v-toolbar-side-icon>
      <v-toolbar-title class="text-uppercase font-weight-light">
        <span class="grey--text">Vuetify</span>
        <span>is ligit</span>
      </v-toolbar-title>
      <v-spacer></v-spacer>

      <!-- Dropdown menu -->
      <v-menu offset-y>
        <v-btn flat slot="activator" color="grey">
          <v-icon left>expand_more</v-icon>
          <span>Menu</span>
        </v-btn>

        <v-list>
          <v-list-tile
            v-for="(item, index) in navitems"
            :key="index"
            router
            :to="item.route"
          >
            <v-list-tile-title>{{ item.name }}</v-list-tile-title>
          </v-list-tile>
        </v-list>
      </v-menu>

      <v-btn flat>
        <span>выход</span>
        <v-icon right>logout</v-icon>
      </v-btn>
    </v-toolbar>
    <!-- Левое меню -->
    <v-navigation-drawer app v-model="drawer" class="indigo lighten-1">
      <v-layout column align-center>
        <v-flex class="mt-5">
          <v-avatar size="100">
            <img :src="getAvatars()" alt="alt" />
          </v-avatar>
          <p class="white--text subheading mt-1 text-xs-center">Chib Zick</p>
        </v-flex>
        <v-flex class="mt-4 mb-3">
          <Popup />
        </v-flex>
      </v-layout>
      <v-list>
        <v-list-tile
          v-for="item in navitems"
          :key="item.name + item.icon"
          router
          :to="item.route"
        >
          <v-list-tile-action>
            <v-icon class="white--text">{{ item.icon }}</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title class="white--text">{{
              item.name
            }}</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
  </nav>
</template>

<script>
import Popup from "./Popup";
export default {
  components: { Popup },
  data() {
    return {
      drawer: false,
      navitems: [
        { icon: "dashboard", name: "Dashboard", route: "/" },
        { icon: "folder", name: "My projects", route: "/projects" },
        { icon: "person", name: "Team", route: "/team" },
      ],
    };
  },
  methods: {
    getAvatars() {
      var rand = Math.floor(Math.random(10, 50) * 100);
      return `https://randomuser.me/api/portraits/men/${rand}.jpg`;
    },
  },
};
</script>
