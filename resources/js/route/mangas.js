import Index from '../components/mangas/Index';
import Show from '../components/mangas/Show';

export default [
    { path: '/mangas', component: Index},
    { path: '/mangas/:name.:id', component: Show},
]
