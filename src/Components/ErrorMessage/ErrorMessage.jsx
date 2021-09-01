import styles from './ErrorMessage.module.css';

const ErrorMessage = () => {
    return (
        <div className={styles.error_block}>
            <p>Oops, there's an error here. 🥺 </p>
            <img src='https://clck.ru/XDXHu' alt='error occured' />
        </div>
    )
}

export default ErrorMessage
