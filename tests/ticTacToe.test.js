const { chromium } = require('playwright');

describe('Tic Tac Toe', () => {
  let browser;
  let page;

  beforeAll(async () => {
    browser = await chromium.launch();
  });

  afterAll(async () => {
    await browser.close();
  });

  beforeEach(async () => {
    page = await browser.newPage();
    await page.goto('http://127.0.0.1:8000/');
  });

  afterEach(async () => {
    await page.close();
  });

  it('should display the game board', async () => {
    const board = await page.waitForSelector('.board');
    expect(board).not.toBeNull();
  });

  it('should allow placing X or O', async () => {
    // Click on the first cell
    await page.click('.cell[data-position="0"]');
    let cellText = await page.textContent('.cell[data-position="0"]');
    expect(cellText).toEqual('X');

    // Click on the second cell
    await page.click('.cell[data-position="1"]');
    cellText = await page.textContent('.cell[data-position="1"]');
    expect(cellText).toEqual('O');
  });

  it('should detect a winning combination', async () => {
    // Place X in winning positions
    await page.click('.cell[data-position="0"]');
    await page.click('.cell[data-position="3"]');
    await page.click('.cell[data-position="1"]');
    await page.click('.cell[data-position="4"]');
    await page.click('.cell[data-position="2"]');

    const status = await page.waitForSelector('.status');
    expect(await status.textContent()).toEqual('Player X wins!');
  });

  it('should end in a tie', async () => {
    // Place X and O alternatively to fill all cells without a win
    await page.click('.cell[data-position="0"]');
    await page.click('.cell[data-position="1"]');
    await page.click('.cell[data-position="2"]');
    await page.click('.cell[data-position="4"]');
    await page.click('.cell[data-position="3"]');
    await page.click('.cell[data-position="6"]');
    await page.click('.cell[data-position="7"]');
    await page.click('.cell[data-position="5"]');
    await page.click('.cell[data-position="8"]');

    const status = await page.waitForSelector('.status');
    expect(await status.textContent()).toEqual("It's a tie!");
  });
});
