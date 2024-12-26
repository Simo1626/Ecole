<template>
    <div>
        <h1>Student Management</h1>
        <button @click="showCreateForm = true">Add Student</button>
        <div v-if="showCreateForm">
            <h2>Add Student</h2>
            <form @submit.prevent="createStudent">
                <input v-model="newStudent.name" placeholder="Name" required>
                <input v-model="newStudent.email" placeholder="Email" required>
                <input v-model="newStudent.phone" placeholder="Phone" required>
                <button type="submit">Add</button>
            </form>
        </div>
        <ul>
            <li v-for="student in students" :key="student.id">
                {{ student.name }} - {{ student.email }} - {{ student.phone }}
                <button @click="editStudent(student)">Edit</button>
                <button @click="deleteStudent(student.id)">Delete</button>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            students: [],
            newStudent: {
                name: '',
                email: '',
                phone: ''
            },
            showCreateForm: false
        };
    },
    methods: {
        fetchStudents() {
            axios.get('/api/students')
                .then(response => {
                    this.students = response.data;
                });
        },
        createStudent() {
            axios.post('/api/students', this.newStudent)
                .then(response => {
                    this.students.push(response.data);
                    this.newStudent = { name: '', email: '', phone: '' };
                    this.showCreateForm = false;
                });
        },
        editStudent(student) {
            // Implement edit functionality
        },
        deleteStudent(id) {
            axios.delete(`/api/students/${id}`)
                .then(response => {
                    this.students = this.students.filter(student => student.id !== id);
                });
        }
    },
    mounted() {
        this.fetchStudents();
    }
};
</script>