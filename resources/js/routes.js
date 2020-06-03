import VueRouter from 'vue-router'
import Home from './pages/Home'
import About from './pages/About'
import Contact from './pages/Contact'
import Login from './pages/Login'
import Register from './pages/Register'

const routes = [
    {
        path: "/",
        component: Home,
        name: 'home',
        meta: {
            title: 'Home'
        }
    },
    {
        path: "/about",
        component: About,
        name: 'about',
        meta: {
            title: 'About'
        }
    },
    {
        path: "/contact",
        component: Contact,
        name: 'contact',
        meta: {
            title: 'Contact'
        }
    },
    {
        path: "/login",
        component: Login,
        name: 'login',
        meta: {
            title: 'Login'
        }
    },
    {
        path: "/register",
        component: Register,
        name: 'register',
        meta: {
            title: 'Register'
        }
    }
]

const router = new VueRouter({
    routes,
    // mode: 'history',
})

export default router