import axios from "axios";

export default () => {
    const get = async (search = "", per_page = 10, link = null) => {
        return await axios.get(link ?? "/admin/course/list", {
            params: {
                search,
                per_page,
            },
        });
    };

    const edit = async (id, data) => {
        return await axios.patch("/admin/course/update/" + id, data);
    };

    const destroy = async (id) => {
        return axios.delete("/admin/course/delete/" + id);
    };

    return {
        get,
        edit,
        destroy,
    };
};
