import React, { useState, useEffect } from 'react';
import PropTypes from 'prop-types';

import { withErrorApi } from '../../hoc-helpers/withErrorApi.jsx';
import PeopleList from '../../components/PeoplePage/PeopleList';
import { getApiResource } from '../../utils/network.js';
import { API_PEOPLE } from '../../constants/api.js';
import { getPeopleId, getPeopleImage } from '../../services/getPeopleData.js';


const PeoplePage = ({ setErrorAPI }) => {

    const [people, setPeople] = useState(null);

    const getResources = async (url) => {

        const response = await getApiResource(url);

        if (response) {
            const peopleList = response.results.map(({ name, url }) => {

                const id = getPeopleId(url);
                const img = getPeopleImage(id);

                return {
                    id,
                    name,
                    img
                }
            })

            setPeople(peopleList);
            setErrorAPI(false);

        } else {
            setErrorAPI(true);
        }
    }

    useEffect(() => {
        getResources(API_PEOPLE);

    });

    return (
        <>
            <h1>Navigation</h1>
            { people && <PeopleList people={people} /> }
        </>
    )
}

PeoplePage.propTypes = {
    setErrorAPI: PropTypes.func
}

export default withErrorApi(PeoplePage);
