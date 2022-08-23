import { useState, useEffect } from 'react';
import styles from './CoinTracker.css';

export default function CoinTracker() {
  const topCoins = ['BTC', 'ETH', 'BNB', 'KLAY'];
  const [loading, setLoading] = useState(true);
  const [coins, setCoins] = useState([]);
  const [currentUnit, setCurrentUnit] = useState(topCoins[0]);
  const [value, setValue] = useState('');
  const [value2, setValue2] = useState('');

  const onSelect = (e) => {
    setCurrentUnit(e.target.value);
    setValue('');
  };

  const onChange = (e) => {
    // console.log(e.target.value);
    setValue(e.target.value);
  };

  const onChange2 = (e) => {
    setValue2(e.target.value);
  };

  const hideDecimal = (number, len) => {
    return Math.floor(number * 10 ** len) / 10 ** len;
  };

  useEffect(() => {
    fetch('https://api.coinpaprika.com/v1/tickers')
      .then((res) => res.json())
      .then((json) => {
        setCoins(json);
        setLoading(false);
      });
  }, []);

  return (
    <div>
      <h1>My Coins! ({coins.length})</h1>
      {loading ? (
        <strong>Loding...</strong>
      ) : (
        <div>
          <div className={styles.currentPrice}>
            <h2>Current Price</h2>

            {topCoins.map((item, idx) => (
              <p key={idx}>
                <strong>1 {item} = </strong>
                <span>{hideDecimal(coins.filter((coin) => coin.symbol === item)[0].quotes.USD.price, 3)}</span>
              </p>
            ))}
          </div>
        </div>
      )}
      <div className='convertPrice'>
        <h3>Convert Price</h3>
        <select onChange={onSelect}>
          {topCoins.map((item, idx) => (
            <option key={idx} defaultValue={idx === 0}>
              {item}
            </option>
          ))}
        </select>
        <div>
          <input
            type='text'
            value={value2 ? value2 * hideDecimal(coins.filter((coin) => coin.symbol === currentUnit)[0].quotes.USD.price, 6) : value}
            placeholder='Enter here...'
            onChange={onChange}
          />
          <span className='unit'>USD</span>
        </div>
        <div>
          <input
            type='text'
            onChange={onChange2}
            value={value ? hideDecimal(value / coins.filter((coin) => coin.symbol === currentUnit)[0].quotes.USD.price, 6) : value2}
          />
          <span className='unit'>{currentUnit}</span>
          <button
            onClick={() => {
              setValue('');
              setValue2('');
            }}
          >
            Clear
          </button>
        </div>
      </div>
    </div>
  );
}
