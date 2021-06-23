<template>
   <div class="flex justify-center items-center h-screen text-sm">
    <form @submit.prevent="submitForm" class="flex flex-col space-y-5">
        <div class="flex flex-col space-y-2">
            <div class="flex jutsify-between items-center space-x-3">
                <span>Estate Title</span>
                <input v-model="form.title" type="text" class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-0 focus:border-green-400" />
            </div>
             <span class="text-sm text-red-400" v-if="errors.title">* {{errors.title}}</span>
        </div>
        <div class="flex jutsify-between items-center space-x-3">
            <span>City/Address</span>
            <input v-model="form.city" type="text" class="bg-gray-50 border border-gray-300 rounded-lg w-20 max-w-20 focus:ring-0 focus:border-green-400" />
            <span>Estate Type</span>
            <input v-model="form.estate_type" type="text" class="bg-gray-50 border border-gray-300 rounded-lg w-20 max-w-20 focus:ring-0 focus:border-green-400" />
            <span>Floor Space</span>
            <input v-model="form.floor_space" type="text" class="bg-gray-50 border border-gray-300 rounded-lg w-20 max-w-20 focus:ring-0 focus:border-green-400" /><span class="text-xs text-gray-700">FtSq </span>
        </div>
        <div class="flex flex-col space-y-2">
            <div class="flex jutsify-between items-center space-x-3">
                <span>Number of Balconies</span>
                <input type="text" v-model="form.number_of_balconies" class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-0 focus:border-green-400 w-16 max-w-16" />
                <span>Balconies space</span>
                <input type="text" v-model="form.balconies_space" class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-0 focus:border-green-400 w-16 max-w-20" /> 
                <span class="text-xs text-gray-700">FtSq </span>
            </div>
            <span class="text-sm text-red-400" v-if="errors.number_of_balconies">*{{errors.number_of_balconies}}</span>
        </div>
        <div class="flex flex-col space-y-2">
            <div class="flex jutsify-between items-center space-x-3 text-sm">
                <span>Number of bedrooms</span>
                <input type="text" v-model="form.number_of_bedrooms" class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-0 focus:border-green-400 w-16 max-w-16" />
                <span>Number of bathroms</span>
                <input type="text" v-model="form.number_of_bathrooms" class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-0 focus:border-green-400 w-16 max-w-20" /> 
                <span>Number of Garages</span>
                <input type="text" v-model="form.number_of_garages" class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-0 focus:border-green-400 w-16 max-w-20" /> 
            </div>
        </div>
        <div class="flex jutsify-between items-center space-x-3">
            <span>Number of parking spaces</span>
                <input type="text" v-model="form.number_of_parking" class="bg-gray-50 border border-gray-300 rounded-lg focus:ring-0 focus:border-green-400 w-16 max-w-20" /> 
            <span>Are Pets Allowed ?</span>
            <input id="pets" name="pets" v-model="form.pets" type="checkbox" class="bg-gray-50 border border-green-600 rounded-lg focus:outline-none" />
        </div>
        <div class="flex items-center">
            <button class="px-5 py-2 rounded-lg bg-green-400 border border-green-500 text-white tracking-wider focus:outline-none">Submit</button>
        </div>
    </form>
   </div>
</template>

<script>
export default {
    props:{
        errors:Object
    },
data(){
    return{
        form:{
            title:'',
            city:'1',
            estate_type:'1',
            floor_space:'',
            number_of_balconies:'',
            balconies_space: '',
            number_of_bedrooms:'',
            number_of_bathrooms:'',
            number_of_garages:'',
            number_of_parking:'',
            pets: false,
        }
    }
},
methods:{
    formReset(){
            this.form.title='';
            this.form.city='';
            this.form.estate_type='';
            this.form.floor_space='';
            this.form.number_of_balconies='';
            this.form.balconies_space= '';
            this.form.number_of_bedrooms='';
            this.form.number_of_bathrooms='';
            this.form.number_of_garages='';
            this.form.number_of_parking='';
            this.form.pets= false;
        },
    submitForm(){
        let data = new FormData();
        data.append('title', this.form.title);
        data.append('city', this.form.city);
        data.append('estate_type', this.form.estate_type);
        data.append('floor_space', this.form.floor_space);
        data.append('number_of_balconies', this.form.number_of_balconies);
        data.append('balconies_space', this.form.balconies_space);
        data.append('number_of_bedrooms', this.form.number_of_bedrooms);
        data.append('number_of_bathrooms', this.form.number_of_bathrooms);
        data.append('number_of_garages', this.form.number_of_garages);
        data.append('number_of_parking', this.form.number_of_parking);
        data.append('pets', this.form.pets);
        this.$inertia.post('/properties',data);
    },
    }
}
</script>

<style>

</style>