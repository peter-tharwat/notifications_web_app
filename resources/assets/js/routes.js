import index from './components/index.vue';
import addnewclient from './components/client/addnewclient.vue';
import viewallclients from './components/client/viewallclients.vue';
export const routes=[
	{
		path:'/',
		component: index
	},
	{
		path:'/addnewclient',
		component:addnewclient
	},
	{
		path:'/viewallclients',
		component:viewallclients
	} 
];