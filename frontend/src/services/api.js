import axios from 'axios';


const api = axios.create({
    baseURL: import.meta.env.VITE_API_PATH,
    timeout: 300000, // indicates, 1000ms ie. 1 second
    headers: {
        "Content-Type": "application/json",
    },
    showLoader: true
});


export default api;

