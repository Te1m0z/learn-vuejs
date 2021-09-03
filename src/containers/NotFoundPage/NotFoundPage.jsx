import React from 'react';
import { useLocation } from 'react-router-dom';


const NotFoundPage = () => {

    let loc = useLocation();

    return (
        <div>
            not found page
            <p>{loc.pathname}</p>
        </div>
    )
}

export default NotFoundPage
