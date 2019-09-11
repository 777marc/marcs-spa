import Home from './components/Home';
import About from './components/About';
import Contact from './components/Contact';
import Login from './components/Login';
import Projects from './components/Projects';
import Posts from './components/Posts';
import NotFound from './components/NotFound';

export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [
        {
            path: "*",
            component: NotFound
        },
        {
            path: '/',
            component: Home
        },
        {
            path: '/about',
            component: About
        },
        {
            path: '/contact',
            component: Contact
        },
        {
            path: '/login',
            component: Login
        },
        {
            path: '/projects',
            component: Projects
        },
        {
            path: '/posts',
            component: Posts
        }

    ]
}