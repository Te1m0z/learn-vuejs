<<<<<<< HEAD:src/Components/PeoplePage/PeopleList/PeopleList.jsx
=======
import React from 'react';
>>>>>>> dbc99a9365b7bfc8f3970d7e1a9226a6ae09205d:src/components/PeoplePage/PeopleList/PeopleList.jsx
import PropTypes from 'prop-types';

import styles from './PeopleList.module.css';

const PeopleList = ({ people }) => {
    return (
        <ul className={styles.list__container}>
            {people.map(({ id, name, img }) => (
                <li className={styles.list__item} key={id}>
                    <a href='/'>
                        <img
                            src={img}
                            alt={name}
                            className={styles.person__photo}
                        />
                        <p>{name}</p>
                    </a>
                </li>
            ))}
        </ul>
    )
}

<<<<<<< HEAD:src/Components/PeoplePage/PeopleList/PeopleList.jsx
PeopleList.propTypes ={
=======
PeopleList.propTypes = {
>>>>>>> dbc99a9365b7bfc8f3970d7e1a9226a6ae09205d:src/components/PeoplePage/PeopleList/PeopleList.jsx
    people: PropTypes.array
}

export default PeopleList
