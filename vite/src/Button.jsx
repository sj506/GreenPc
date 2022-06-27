import PropsTypes from 'prop-types';
import styled from './Button.module.css';

function Button({ text }) {
    return <button className={styled.btn}>{text}</button>;
}

Button.PropsTypes = {
    text: PropsTypes.string.isRequired,
};
export default Button;
