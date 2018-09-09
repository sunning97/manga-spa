import Index from '../components/authors/Index';
import Show from '../components/authors/Show';

export default [
    { path: '/authors', component: Index },
    { path: '/authors/:name.:id', component: Show },
]
