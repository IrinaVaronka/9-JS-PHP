import { useEffect } from "react";

function Gone10() {

    useEffect(() => {
        console.log('GONE ws born');
        return () => {
            console.log('Gone is dead');
        }
    }, []);

    return <h2>I'm still HERE</h2>

}

export default Gone10;