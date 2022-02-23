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

    const destroy = (id) => {
        return axios.delete("/admin/industries/" + id);
    };

    return {
        get,
        create,
        update,
        destroy,
    };
};
