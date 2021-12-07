class Slug {
    static generate(title) {
        return title
            .trim()
            .replace(/[^a-z0-9]/gi, "-")
            .replace(/-+/g, "-")
            .replace(/^-|-$/g, "")
            .toLowerCase();
    }
}

export default Slug;
