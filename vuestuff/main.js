Vue.component('task-list', {
    template: `<div>
                    <task v-for="task in tasks">{{ task.task }}</task>
                </div>`,

    data(){
        return {
            tasks: [
                {task: 't2', completed: true},
                {task: 't3', completed: false},
                {task: 't1', completed: false},
                {task: 't4', completed: true},
                {task: 't5', completed: false},
            ]
        };
    }
});

Vue.component('task', {
    template: '<li><slot></slot></li>'
});


new Vue({
    el: '#root'
})