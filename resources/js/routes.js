import VueRouter from 'vue-router'
import ExampleComponent from './components/ExampleComponent'
import Example2Component from './components/Example2Component'

const routes = [
    {
        path: "/",
        component: ExampleComponent
    },
    {
        path: "/example2",
        component: Example2Component
    }
]

const router = new VueRouter({
    routes
})

export default router