export default () => {
    const smoothScrollTop = () => {
        scrollTo({
            top: 0,
            behavior: "smooth",
        });
    };

    return {
        smoothScrollTop,
    };
};
