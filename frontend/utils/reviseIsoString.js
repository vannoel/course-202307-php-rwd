const formatIsoString = /((\d{4})-(\d{2})-(\d{2}))T((\d{2}):(\d{2}):(\d{2}))/;
// 0: total

// 1: Date(YYYY-MM-DD)
// 2: Full Year
// 3: Mounth
// 4: Day

// 5: Time(HH-MM-SS)
// 6: Hour
// 7: Minute
// 8: Second

const reviseIsoString = function (isoString) {
  const localIsoString = new Date(Date.parse(isoString)).toISOString();
  const separateDateTime = formatIsoString.exec(localIsoString);
  let obj = {
    whole: '',
    date: '',
    year: '',
    month: '',
    day: '',
    time: '',
    hour: '',
    minute: '',
    second: '',
  };
  if (separateDateTime) {
    obj = {
      whole: separateDateTime[0].replace('T', ' '),
      date: separateDateTime[1],
      year: separateDateTime[2],
      month: separateDateTime[3],
      day: separateDateTime[4],
      time: separateDateTime[5],
      hour: separateDateTime[6],
      minute: separateDateTime[7],
      second: separateDateTime[8],
    };
  }
  return obj;
};