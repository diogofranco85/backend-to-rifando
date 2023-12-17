import axios from "axios";

export const httpRequest = axios.create({
    baseURL: window.apiBackendUrl,
    headers: {
        "Content-type": "application/json",
        "Accept": "application/json",
        "x-tenant-id": window.tenantId,
        'X-Requested-With': 'XMLHttpRequest'
    }
})
