import axios from "axios";

export default () => {
    const get = (search, per_page, link = null) => {
        return axios.get(link ?? "/admin/industries/list", {
            params: {
                search,
                per_page,
            },
        });
    };

    const create = (data) => {
        return axios.post("/admin/industries", data);
    };

    const update = (id, data) => {
        return axios.patch("/admin/industries/update/" + id, data);
    };

    return {
        get,
        create,
        update,
    };
};
