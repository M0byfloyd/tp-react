import React, {useEffect, useRef, useState} from "react";
import Title from "./Title";
import {Card} from "./Card";
import axios from "axios";

export function BlogPart() {
    const [posts, setPosts] = React.useState([]);
    const [count, setCount] = React.useState(0);

    useEffect(() => {
        getPosts();
    },[])

    const getPosts = function () {
        axios('http://localhost/api/posts', {
            method: "GET",
            headers: {'Accept': 'application/json'}
        }).then((res) => {setPosts(res.data)})
    }

    return (
        <div>
            <Title titleLevel={1} text={'Blogs'}/>

            {posts.map((post)=> (
                <Card message={post.message} title={post.title} author={post.author} />
            ))}
            <button onClick={() => setCount(count + 1)}>plus</button>
        </div>

    )
}
