<template>
    <v-dialog max-width="600px">
        <v-btn flat slot="activator" class="success">
            <span>Add new project</span>
        </v-btn>
        <v-card>
            <v-card-title>
                <h2>Add new project</h2>
            </v-card-title>
            <v-card-text>
                <v-form>
                    <v-text-field label="Name" prepend-icon="folder" v-model="name"></v-text-field>
                    <v-textarea label="Description" prepend-icon="edit" v-model="description"></v-textarea>

                    <!-- Datepicker -->
                    <v-menu>
                        <v-text-field 
                        slot="activator" 
                        label="Select date" 
                        prepend-icon="date_range"
                        :value="formattedDate"
                        ></v-text-field>
                        <v-date-picker v-model="due"></v-date-picker>
                    </v-menu>

                    <v-btn flat class="success mx-0" @click="submitPopup">
                        <span>add project</span>
                    </v-btn>

                </v-form>
            </v-card-text>
        </v-card>
    </v-dialog>
</template>

<script>
import format from "date-fns/format"
import parseISO from 'date-fns/parseISO'

export default {
    
    data() {
        return {
            name:"",
            description:"",
            due:null,
        }
    },
    methods: {
        submitPopup() {
            console.log(this.name, this.description)
        }
    },
    computed: {
        formattedDate() {
            return this.due ? format(parseISO(this.due), "do MMM yyyy") : "";
        }
    },
};
</script>