import router from '../router';
import date from "../functions/time/dates.js";


export default {
    login(state){
        state.isLoggedIn = true;
        router.push("/porch")
    },
    logout(state){
        state.isLoggedIn = false;
        localStorage.removeItem("token");
        localStorage.removeItem("expires");
        router.push('/');
    },
    setUserId(state, id){
        state.userId = id;
    },
    setTodayDate(state){
        //state.todayDate = new Date().toJSON().slice(0, 19).replace('T', ' ');
        //state.todayDate = new Date();
        state.todayDate = date.getToday;
    }



};