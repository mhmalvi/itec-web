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

    return {
        get,
    };
};
