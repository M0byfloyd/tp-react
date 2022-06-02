import React from "react";
import Title from "./Title";

export function Card({title,message,author}) {

    return (
        <div>
            <Title titleLevel={2} text={title} />
            <p>{author}</p>
            <p>
                {message}
            </p>
        </div>
    )
}
