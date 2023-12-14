import axios from "axios";

const api = axios.create({
    baseURL: "http://localhost/api",
    headers: {
        "Content-type": "application/json",
        "Accept": "application/json",
    }
})

export default api;