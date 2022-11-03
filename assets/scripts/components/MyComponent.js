import React from 'react'

function MyComponent(props) {
return (
<div className="example-wrapper">
    <h1>Hello World! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code>src/Controller/DefaultController.php</code></li>
        <li>Your template at <code>templates/default/index.html.twig</code></li>
        <li>Your react component at <code>assets/scripts/MyComponent.js</code></li>
    </ul>
</div>
)
}

export default MyComponent