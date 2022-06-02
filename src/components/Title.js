import React from "react";

export default function Title({titleLevel,text}) {
    const TitleTag = `h${titleLevel}`;

    return (
        <TitleTag>{text}</TitleTag>
    )
}
