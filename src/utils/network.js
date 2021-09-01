export const getApiResource = async (url) => {
    try {
        const res = await fetch(url);
        if (!res.ok) {
            console.log("API fetch error:", res.status)
            return false;
        }
              
        const body = await res.json();
        return body;

    } catch (err) {
        console.log("API fetch error:", err.message);
        return false;
    }
};