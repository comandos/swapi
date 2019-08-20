import People from './components/People';
import Details from './components/Details';

export default {
	mode: 'history',
	routes : [
		{
			path: '/swapi',
			component: People,
			name: 'home'
		},
		{
			path: '/swapi/people',
			component: People,
			name: 'people'
		},
		{
			path: '/swapi/:resource/:id',
			component: Details,
			name: 'details'
		}
	]
}
