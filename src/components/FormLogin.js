import React from "react";
import Title from "./Title";
import axios from "axios";

export function FormLogin() {

    function submit(e) {
        e.preventDefault();
        const isRegister = e.nativeEvent.submitter.name === 'register';
        const url = isRegister ? 'http://localhost/api/users':'http://localhost/authentication_token';

        axios(
            {
                method: 'post',
                url: url,
                data: {
                    username: document.getElementById('formUsername').value,
                    password: document.getElementById('formPassword').value
                }
            })
            .then(resp => alert(resp.data))
            .catch(
                (e) => {
                    alert(`Ah bah c'est dommage : ${e}`)
                })
    }

    return (
        <form onSubmit={submit}>
            <Title titleLevel={1} text={'Please Log In'}/>

            <input id="formUsername" placeholder="username" name="Username"/>
            <input id="formPassword" type="password" placeholder="password" name="Password"/>

            <button name="login"> LOGIN</button>
            <button name="register"> Register</button>
        </form>
    )
}
