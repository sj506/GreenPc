import { useState, useEffect } from 'react';

export default function TodoApp() {
  const [todo, setTodo] = useState('');
  const [todoList, setTodoList] = useState([]);

  // const checkTodoList = () => {
  //   console.log(todoList);
  // };

  // useEffect(checkTodoList, [todoList]);
  useEffect(() => console.log(todoList), [todoList]);

  const onChange = (e) => {
    setTodo(e.target.value);
  };
  const onSubmit = (e) => {
    e.preventDefault();
    if (todo === '') {
      return;
    }
    setTodoList((currentArray) => [todo, ...currentArray]);
    setTodo('');
  };

  const reset = () => {
    setTodoList([]);
  };

  return (
    <div>
      <h1>My Todo List ({todoList.length})</h1>
      <form action='' onSubmit={onSubmit}>
        <input type='text' placeholder='Write your to do...' value={todo} onChange={onChange} />
        <button>Add To do</button>
        <button onClick={reset}>reset</button>
      </form>
      <ul>
        {todoList.map((item, idx) => (
          <li key={idx}>{item}</li>
        ))}
      </ul>
    </div>
  );
}
