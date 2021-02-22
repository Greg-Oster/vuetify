<template>
  <div class="team">
    <h1 class="subheading grey--text">This is an team page</h1>

    <v-container fluid class="my-5 lighten-3">
      <v-layout row wrap>
        <v-flex xs12 sm6 md4 lg3 v-for="item in team" :key="item.name">
          <v-card flat class="text-xs-center ma-3">
            <v-responsive class="pt-4">
              <v-avatar size="100" color="grey lighten-2">
                <img :src="getAvatars()" alt="alt" />
              </v-avatar>
            </v-responsive>
            <div class="subheading">
              <span>{{ item.name }}</span>
            </div>
            <div class="grey--text">
              <span>{{ item.role }}</span>
            </div>
            <v-card-actions>
              <v-btn flat color="grey">
                <v-icon small left>message</v-icon>
                <span>message</span>
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-flex>
      </v-layout>
    </v-container>
  </div>
</template>

<script>
export default {
  data() {
    return {
      team: [
        { name: "The Net Ninja", role: "Web developer" },
        { name: "Ryu", role: "Graphic designer" },
        { name: "Chun Li", role: "Web developer" },
        { name: "Gouken", role: "Social media maverick" },
        { name: "Yoshi", role: "Sales guru" },
      ],
    };
  },
  computed: {
    getAvatar() {
      var rand = Math.floor(Math.random(10, 50) * 100);
      return `https://randomuser.me/api/portraits/men/${rand}.jpg`;
    },
  },

  methods: {
    getAvatars() {
      var rand = Math.floor(Math.random(10, 50) * 100);
      return `https://randomuser.me/api/portraits/men/${rand}.jpg`;
    },
  },
};
</script>