import Index from '../components/genres/Index';
import Edit from '../components/genres/Edit';
export default [
    { path: '/genres',name:'aaa', component: Index },
    { path: '/genres/edit/:name.:id', component: Edit },
]
