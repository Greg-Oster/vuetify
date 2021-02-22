<template>
  <div class="dashboard">
    <h1 class="subheading grey--text">Dashboard</h1>
    <v-container fluid class="my-5 lighten-3">
      <v-layout row class="mb-3">
        <v-tooltip top>
          <v-btn class="ml-0 white" @click="sortBy('title')" slot="activator">
            <v-icon left>folder</v-icon>
            <span>Sort by project name</span>
          </v-btn>
          <span>Сортировать по названию проекта</span>
        </v-tooltip>

        <v-tooltip top>
          <v-btn class="white" @click="sortBy('person')" slot="activator">
            <v-icon left>person</v-icon>
            <span>Sort by person</span>
          </v-btn>
          <span>Сортировать по имени исполнителя</span>
        </v-tooltip>
      </v-layout>

      <v-card flat>
        <v-container
          fluid
          :class="`pa-0 task task--${item.status}`"
          v-for="item in projects"
          :key="item.title"
        >
          <v-layout row wrap class="pa-3">
            <v-flex xs12 sm12 md6>
              <h4 class="caption grey--text">{{ item.title }}</h4>
              <p>{{ item.content }}</p>
            </v-flex>
            <v-flex xs12 sm4 md2>
              <h4 class="caption grey--text">Person</h4>
              <p>{{ item.person }}</p>
            </v-flex>
            <v-flex xs12 sm4 md2>
              <h4 class="caption grey--text">Due by</h4>
              <p>{{ item.due }}</p>
            </v-flex>
            <v-flex xs12 sm4 md2>
              <div class="right">
                <v-chip
                  small
                  :class="`chip chip--${item.status} white--text my-2`"
                  >{{ item.status }}</v-chip
                >
              </div>
            </v-flex>
          </v-layout>
          <v-divider></v-divider>
        </v-container>
      </v-card>
    </v-container>
  </div>
</template>

<script>
export default {
  data() {
    return {
      projects: [
        {
          title: "Design a new website",
          person: "The Net Ninja",
          due: "1st Jan 2019",
          status: "ongoing",
          content:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt consequuntur eos eligendi illum minima adipisci deleniti, dicta mollitia enim explicabo fugiat quidem ducimus praesentium voluptates porro molestias non sequi animi!",
        },
        {
          title: "Code up the homepage",
          person: "Chun Li",
          due: "10th Jan 2019",
          status: "complete",
          content:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt consequuntur eos eligendi illum minima adipisci deleniti, dicta mollitia enim explicabo fugiat quidem ducimus praesentium voluptates porro molestias non sequi animi!",
        },
        {
          title: "Design video thumbnails",
          person: "Ryu",
          due: "20th Dec 2018",
          status: "complete",
          content:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt consequuntur eos eligendi illum minima adipisci deleniti, dicta mollitia enim explicabo fugiat quidem ducimus praesentium voluptates porro molestias non sequi animi!",
        },
        {
          title: "Create a community forum",
          person: "Gouken",
          due: "20th Oct 2018",
          status: "overdue",
          content:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt consequuntur eos eligendi illum minima adipisci deleniti, dicta mollitia enim explicabo fugiat quidem ducimus praesentium voluptates porro molestias non sequi animi!",
        },
      ],
    };
  },
  methods: {
    sortBy(param) {
      this.projects.sort((a, b) => (a[param] < b[param] ? -1 : 1));
    },
  },
};
</script>

<style scoped>
.task.task--ongoing {
  border-left: 3px solid rgb(245, 178, 33);
}

.task.task--complete {
  border-left: 3px solid lightseagreen;
}

.task.task--overdue {
  border-left: 3px solid purple;
}

.v-chip.chip--ongoing {
  background: rgb(245, 178, 33);
}

.chip.chip--complete {
  background-color: lightseagreen;
}

.chip.chip--overdue {
  background-color: purple;
}
</style>
