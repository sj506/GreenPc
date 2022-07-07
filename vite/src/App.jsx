import { useState, useEffect } from 'react';

function App() {
    const [loading, setLoaing] = useState(true);
    const [coin, setCoin] = useState([]);

    useEffect(() => {
        fetch('https://api.coinpaprika.com/v1/tickers')
            .then((res) => res.json())
            .then((res) => {
                setCoin(res);
                setLoaing(false);
            });
    }, []);

    return (
        <div>
            <h1>My coins ({loading ? '0' : coin.length})</h1>
            <input type="number" placeholder="Write Your USD" />
            <br />
            {loading ? (
                <strong>Loading... </strong>
            ) : (
                <select>
                    {coin.map((item) => (
                        <option>
                            {item.name}:{item.quotes.USD.price}
                        </option>
                    ))}
                </select>
            )}
        </div>
    );
}

export default App;
