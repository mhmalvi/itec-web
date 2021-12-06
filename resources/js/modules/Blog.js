import axios from "axios";

class Blog {
    static async get(slug) {
        return new Promise((resolve, reject) => {
            axios
                .get("/admin/blogs/" + slug + "/raw")
                .then((res) => {
                    resolve(res.data.data);
                })
                .catch((err) => {
                    reject(err);
                });
        });
    }

    static async getPaginated(actionUrl, itemsPerPage, query) {
        return new Promise((resolve, reject) => {
            axios
                .get(actionUrl, {
                    params: {
                        items: itemsPerPage,
                        search: query,
                    },
                })
                .then((res) => {
                    resolve(res.data);
                })
                .catch((err) => {
                    reject(err);
                });
        });
    }

    static async delete(slug) {
        return new Promise((resolve, reject) => {
            axios
                .get("/admin/blogs/remove/" + slug)
                .then((res) => {
                    resolve(res.data);
                })
                .catch((err) => {
                    reject(err);
                });
        });
    }
}

export default Blog;
