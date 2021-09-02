import {
    HTTPS, SWAPI_ROOT, SWAPI_PEOPLE,
    GUIDE_IMG_EXTENSION, API_IMG_PERSON
} from '../constants/api.js';

const getId = (url, category) => {
    const id = url.replace(HTTPS + SWAPI_ROOT + category, '').replace(/\//g, '');

    return id;
}

export const getPeopleId = url => getId(url, SWAPI_PEOPLE);

export const getPeopleImage = id => `${API_IMG_PERSON}/${id + GUIDE_IMG_EXTENSION}`;