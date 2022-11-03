/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
  
import React from 'react'
import ReactDOM from 'react-dom'
import MyComponent from './scripts/components/MyComponent'

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

ReactDOM.render(
    <React.StrictMode>
        <MyComponent />
    </React.StrictMode>,
    document.getElementById('root')
)
