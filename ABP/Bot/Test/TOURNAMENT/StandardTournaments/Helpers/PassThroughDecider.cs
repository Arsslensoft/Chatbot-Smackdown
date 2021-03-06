﻿//-----------------------------------------------------------------------
// <copyright file="PassThroughDecider.cs" company="(none)">
//  Copyright (c) 2009 John Gietzen
//
//  Permission is hereby granted, free of charge, to any person obtaining
//  a copy of this software and associated documentation files (the
//  "Software"), to deal in the Software without restriction, including
//  without limitation the rights to use, copy, modify, merge, publish,
//  distribute, sublicense, and/or sell copies of the Software, and to
//  permit persons to whom the Software is furnished to do so, subject to
//  the following conditions:
//
//  The above copyright notice and this permission notice shall be
//  included in all copies or substantial portions of the Software.
//
//  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
//  EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
//  MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
//  NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS
//  BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
//  ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
//  CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
//  SOFTWARE
// </copyright>
// <author>Katie Johnson</author>
// <author>John Gietzen</author>
//-----------------------------------------------------------------------

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Tournaments.Graphics;
using System.Drawing;

namespace Tournaments.Standard
{
    public class PassThroughDecider : EliminationDecider
    {
        private EliminationNode node = null;

        public PassThroughDecider(EliminationNode node)
        {
            if (node == null)
            {
                throw new ArgumentNullException("node");
            }
            this.node = node;
        }

        public override bool IsDecided
        {
            get
            {
                return this.node.IsDecided;
            }
        }

        public override User GetWinner()
        {
            if (!this.node.IsDecided)
            {
                throw new InvalidOperationException("Cannot determine a winner from a node that is undecided.");
            }

            return this.node.Team;
        }

        public override User GetLoser()
        {
            throw new InvalidOperationException("Cannot determine a loser from a pass through.");
        }

        public override NodeMeasurement MeasureWinner(IGraphics g, TournamentNameTable names, float textHeight, Score score)
        {
            string teamName = "";
            if (this.IsDecided)
            {
                var winner = this.GetWinner();
                if (winner != null)
                {
                    teamName = names[winner.Id];
                }
                else
                {
                    teamName = "bye";
                }
            }

            return this.MeasureTextBox(g, textHeight, teamName, score);
        }

        public override NodeMeasurement MeasureLoser(IGraphics g, TournamentNameTable names, float textHeight, Score score)
        {
            throw new InvalidOperationException("Cannot determine a loser from a pass through.");
        }

        public override void RenderWinner(IGraphics g, TournamentNameTable names, float x, float y, float textHeight, Score score)
        {
            string teamName = "";
            if (this.IsDecided)
            {
                var winner = this.GetWinner();
                if (winner != null)
                {
                    teamName = names[winner.Id];
                }
                else
                {
                    teamName = "bye";
                }
            }

            this.RenderTextBox(g, x, y, textHeight, teamName, score);
        }

        public override void RenderLoser(IGraphics g, TournamentNameTable names, float x, float y, float textHeight, Score score)
        {
            throw new InvalidOperationException("Cannot determine a loser from a pass through.");
        }

        public override bool ApplyPairing(TournamentPairing pairing)
        {
            if (pairing == null)
            {
                throw new ArgumentNullException("pairing");
            }

            return false;
        }

        public override IEnumerable<TournamentPairing> FindUndecided()
        {
            yield break;
        }

        public override IEnumerable<EliminationNode> FindNodes(Func<EliminationNode, bool> filter)
        {
            if (this.node != null)
            {
                foreach (var match in this.node.FindNodes(filter))
                {
                    yield return match;
                }
            }
        }

        public override IEnumerable<EliminationDecider> FindDeciders(Func<EliminationDecider, bool> filter)
        {
            if (filter.Invoke(this))
            {
                yield return this;
            }

            if (this.node != null)
            {
                foreach (var match in this.node.FindDeciders(filter))
                {
                    yield return match;
                }
            }
        }
    }
}
