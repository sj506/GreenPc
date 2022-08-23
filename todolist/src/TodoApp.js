import { useState } from 'react';

export default function TodoApp() {
  const [todo, setTodo] = useState('');
  const [todoList, setTodoList] = useState([]);

  const onChange = (e) => {
    setTodo(e.target.value);
  };
  const onSubmit = (e) => {
    e.preventDefault();
    if (todo === '') {
      return;
    }
    // console.log(todoList);
    setTodoList((currentArray) => [todo, ...currentArray]);
    setTodo('');
  };
  console.log(todoList);

  return (
    <div>
      <h1>My Todo List ({todoList.length})</h1>
      <form action='' onSubmit={onSubmit}>
        <input type='text' placeholder='Write your to do...' value={todo} onChange={onChange} />
        <button>Add To do</button>
      </form>
      <ul>
        {todoList.map((item) => (
          <li>{item}</li>
        ))}
      </ul>
    </div>
  );
}
